<?php
/**
 * Created by PhpStorm.
 * User: 啦啦啦
 * Date: 2021/10/21
 * Time: 18:43
 */

namespace App\Http\Controllers\Home;


use App\Categories;
use App\Collections;
use App\Downloads;
use App\Feedbacks;
use App\Http\Controllers\Api\Controller;
use App\News;
use App\Products;
use App\ProductsComments;
use App\Tags;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function __construct(){
        $session = new Session();
        $cdata = Collections::query()->where(['user_id' => $session->get('id')])->get()->toArray();
        View::share('wantCount', count($cdata));

        $data = ProductsComments::query()->where(['user_id' => $session->get('id')])->get()->toArray();
        View::share('commentCount', count($data));

    }
    public function setLanguage(Request $request)
    {
        $language = $request->input('language');
        $session = new Session();
        $session->set('language', $language);
        return redirect('/');
    }

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        //获取最新的十条数据
        $query = Products::query();
        if (!empty($keyword)){
            $query->where('title', 'like', '%' . $keyword . '%');
        }
        $newProduct = $query->orderBy('created_at', 'desc')->limit(10)->get()->toArray();
        $newProductArr = [];
        if (!empty($newProduct)) foreach ($newProduct as $item){
            $newProductArr[] = $item;

        }
        $query = Products::query();
        if (!empty($keyword)){
            $query->where('title', 'like', '%' . $keyword . '%');
        }

        $productMap = $query->get()->groupBy('tags_id')->toArray();
        $productsData = [];
        foreach ($productMap as $tag => $products) {
            if ($tag == "") {
                continue;
            }
            $tagArr = Tags::query()->find($tag)->toArray();
            $productItem['name'] = $tagArr['name'];
            $productItem['data'] = collect($products)->map(function ($product) {
                //查询分类
                return $product;
            });
            $productsData[] = $productItem;
        }
        $tagList = Tags::query()->get()->toArray();
        return view('home.index', ['list' => $productsData, 'newProduct' =>$newProductArr,  'tagList' => $tagList, 'keyword' => $keyword]);
    }
    public function detail($id)
    {
        $data = Products::query()->find($id)->toArray();
        $category = Categories::query()->find($data['categories_id'])->toArray();
        $tagArr = Tags::query()->find($data['tags_id'])->toArray();
        $data['tag_name'] = $tagArr['name'];
        $data['category'] = $category['name'];
        $picArr = [];
        if (!empty($data['pic'])){
            $picArr[] = $data['pic'];
        }
        if (!empty($data['pic_1'])){
            $picArr[] = $data['pic_1'];
        }
        if (!empty($data['pic_2'])){
            $picArr[] = $data['pic_2'];
        }
        if (!empty($data['pic_3'])){
            $picArr[] = $data['pic_3'];
        }
        $data['picArr'] = $picArr;
        //获取商品评论
        $comments = ProductsComments::query()->where(['product_id' => $data['id']])->get()->toArray();
        $data['comments'] = $comments;
        $data['comment_count'] = count($comments);

        //获取该分类下相关的商品
        $relateP = Products::query()->where(['categories_id' => $data['categories_id']])->get()->toArray();
        $data['relateProduct'] = $relateP;
        Products::query()->find($id)->update(['view_num' => $data['view_num'] +1]);
        return view('home.detail', $data);
    }
    public function collectionsDelete(Request $request){
        Collections::query()->find($request->input('id'))->delete();
        return $this->ok();


    }
    public function collection()
    {
        //如果没有登录，跳转登录页面
        $session = new Session();
        $username = $session->get('id');
        if (empty($username)){
            return redirect('login');
        }
        $data = Collections::query()->where(['user_id' => $username])->get()->toArray();
        if (!empty($data)) foreach ($data as &$value){
            $product = Products::query()->find($value['product_id'])->toArray();
            $value['product'] = $product;
        }

        return view('home.collections', ['list' => $data, 'num' => count($data)]);
    }
    public function faceback(Request $request)
    {
        //如果没有登录，跳转登录页面
        $session = new Session();
        $username = $session->get('username');
        if (empty($username)){

            return redirect('login');
        }
        return view('home.faceback');
    }
    public function want($product_id)
    {
        //如果没有登录，跳转登录页面
        $session = new Session();
        $username = $session->get('username');
        if (empty($username)){
            return redirect('login');
        }
        $product = Products::query()->find($product_id)->toArray();
        $shoper = User::query()->where(['name' => $product['uploader']])->get()->toArray();
        //获取商家的信息
        $data['product'] = $product;
        $data['shop'] = $shoper[0];
        return view('home.want', $data);
    }
    public function download()
    {
        //如果没有登录，跳转登录页面
        $session = new Session();
        $username = $session->get('username');
        if (empty($username)){
            return redirect('login');
        }
        $data = Downloads::query()->where(['username' => $username])->get()->toArray();
        if (!empty($data)) foreach ($data as &$value){
            $product = Products::query()->find($value['product_id'])->toArray();
            $value['pic'] = $product['pic'];
            $value['tag'] = $product['tag'];
        }
        return view('home.download', ['list' => $data, 'num' => count($data)]);
    }
    public function aboutUs()
    {
        return view('home.about');
    }
    public function new()
    {
        $new = News::query()->get()->toArray();
        return view('home.news', ['list' => $new]);
    }
    public function categories(Request $request){
        //根据分类获取商品数据
        $keyword = $request->input('keyword');
        $query = Products::query();
        if (!empty($keyword)){
            $query->where('title', 'like', '%' . $keyword . '%');
        }

        $productMap = $query->get()->groupBy('categories_id')->toArray();
        $productsData = [];
        $cateProduct = [];
        foreach ($productMap as $cate => $products) {
            if ($cate == "") {
                continue;
            }
            $cateArr = Categories::query()->find($cate)->toArray();
            $cateProduct['cate'][$cate] = $cateArr['name'];
            $item = collect($products)->map(function ($product) {
                //查询分类
                return $product;
            });
            $cateProduct['data'][$cate] = $item->toArray();
        }
        //获取最新的十条数据
        $query = Products::query();
        if (!empty($keyword)){
            $query->where('title', 'like', '%' . $keyword . '%');
        }
        $newProduct = $query->orderBy('created_at', 'desc')->limit(10)->get()->toArray();
        $newProductArr = [];
        if (!empty($newProduct)) foreach ($newProduct as $item){
            $newProductArr[] = $item;

        }
        return view('home.categories', ['cateList' => $cateProduct, 'newList' => $newProductArr]);

    }
    public function category($category)
    {
        $category_data = Categories::query()->find($category)->toArray();
        //将数据分组，三个为一组
        $data = Products::query()->where(['categories_id' => $category])->get()->toArray();
        return view('home.category', ['list' => $data, 'name' => $category_data['name']]);
    }

    public function logout()
    {
        $session = new Session();
        $session->clear();

        return redirect("/login");
    }
    public function login()
    {
        return view('home.login');
    }
    public function signup()
    {
        return view('home.signup');
    }

    public function collectionsAction(Request $request)
    {
        $session = new Session();
        $product_data = Products::query()->find($request->input('product_id'))->toArray();
        if (empty($product_data)){
            throw ValidationException::withMessages([
                'name' => "상품이 존재하지 않다",
            ]);
        }
        $insertData = [
            'product_id' => $request->input('product_id'),
            'product_name' => $product_data['title'],
            'user_id' => $session->get('id'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'phone_number' => $request->input('phone_number')
        ];
        $data = Collections::query()->where(['user_id' => $session->get('id'), 'product_id' => $request->input('product_id')])->get()->toArray();
        if (!empty($data)){
            throw ValidationException::withMessages([
                'name' => "조급해 하지 마시고 판매자의 연락을 기다리시거나 판매자에게 연락하실 수 있다.",
            ]);
        }
        Collections::query()->create($insertData);
        return $this->ok([]);
    }
    public function downLoadAction($id)
    {
        $session = new Session();
        $product_data = Products::query()->find($id)->toArray();
        if (empty($product_data)){
            return $this->fail(201, '상품이 존재하지 않다');
        }
        $insertData = [
            'product_id' => $id,
            'product_name' => $product_data['title'],
            'username' => $session->get('username')
        ];
        $data = Downloads::query()->where(['username' => $session->get('username'), 'product_id' => $id])->get()->toArray();
        if (empty($data)){
            Downloads::query()->create($insertData);
        }
        $filename = substr($product_data['pic'], 1);

        //设置头信息
        header('Content-Type:application/octet-stream');//设置内容类型
        header('Content-Disposition:attachment;filename=' . basename($filename));

        header('Content-Length:' . filesize($filename));
        header('Accept-Ranges:bytes');
        //读取文件并写入到输出缓冲

        readfile($filename);

    }
    public function feedbackAction(Request $request)
    {
        $session = new Session();
        $insertData = [
            'real_name' => $request->input('real_name'),
            'user_id' => $session->get('id'),
            'email' => $request->input('email'),
            'content' => $request->input('content')
        ];
        Feedbacks::query()->create($insertData);
        return $this->ok([]);
    }

    public function commentsDelete(Request $request){
        ProductsComments::query()->find($request->input('id'))->delete();
        return $this->ok([]);


    }
    public function comments()
    {
        //如果没有登录，跳转登录页面
        $session = new Session();
        $username = $session->get('id');
        if (empty($username)){
            redirect('login');
        }
        $data = ProductsComments::query()->where(['user_id' => $username])->get()->toArray();

        return view('home.comment', ['list' => $data]);
    }
    public function commentsAction(Request $request)
    {
        $session = new Session();
        $product_data = Products::query()->find($request->input('product_id'))->toArray();
        if (empty($product_data)){
            throw ValidationException::withMessages([
                'name' => "상품이 존재하지 않다",
            ]);
        }
        $insertData = [
            'product_id' => $request->input('product_id'),
            'product_name' => $product_data['title'],
            'user_id' => $session->get('id'),
            'title' => $request->input('title'),
            'username' => $session->get('username'),
            'description' => $request->input('description'),
        ];
        ProductsComments::query()->create($insertData);
        return $this->ok([]);
    }

}