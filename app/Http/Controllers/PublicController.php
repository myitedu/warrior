<?php

namespace App\Http\Controllers;


use App\Airport;
use App\Birthday;
use http\Encoding\Stream;
use Illuminate\Http\Request;
use Psy\Util\Str;

class PublicController extends Controller
{
<<<<<<< HEAD
    public function arrays(){
        return view("arrays");
    }

    public function resume(Request $request){
        return view('professional.resume');
    }
    public function contactus(){
        $parms = [
            'name'=>'Jon'
        ];
        return view('contactus', compact('parms'));
=======
    public function welcomeBobby()
    {
        return view('welcome_bobby');

    }

    public function helloWorld()
    {
        return view("hello_world");
>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c
    }

    public function airports(Request $request){

        $input = $request->all();
        $id = $input['id'] ?? 2;
        $email = $input['email']?? "jontoshmatov@yahoo.com";
        if(!$email){
            return "Email is empty";
        }
        $birthday = Birthday::where('email', 'like', '%' . $email . '%')->get();
        $parms = [
            'id' => $id,
            'input' => $input,
            'birthdays' => $birthday
        ];
<<<<<<< HEAD

        return view("airports",compact('parms'));
    }

   /* public function practice(Request $request){
        $text = 'Tashev';
        $result = Str::contains($text,'s');//value bor bolsa true yoki false javoblarini beradi
        echo "<pre>";
        print_r($result);
    }*/
   /* public function practice(Request $request){
        $result = Str::plural('animal');//valuelarni koplikda korsatib beradi
        echo "<pre>";
        print_r($result);
    }*/
   /* public function practice(Request $request){
        $result = Str::ascii('û');//noaniq harflarni tuzatib beradi
        echo "<pre>";
        print_r[$result];
    }*/
    /*public function practice(Request $request){
        $result = Str::beforeLast('This is my name', 'my');//bu string qidirayotgan sozidan oldin nimaligini korsatadi
        echo "<pre>";
        print_r[$result];
    }*/
    /*public function practice(Request $request){
        $slice = Str::between('This is my name', 'This', 'name');//bu string yozgan sozlarizni ortasida qaysi sozlar borligini korsatadi
        echo "<pre>";
        print_r[$slice];
    }*/
  /* public function practice(Request $request){
        $converted = Str::camel('my-it-edu');//bu string yozgan sozlardagi chiziqlarni uchirib qoshib yozadi
        echo "<pre>";
        print_r[$converted];
    }*/
    /*public function practice(Request $request){
        $contains = Str::contains('This is my name', 'my');//bu string yozgan soziz borligini aniqlab beradi.
        echo "<pre>";
        print_r[$contains];
    }*/
    /*public function practice(Request $request){
        $contains = Str::contains('This is my name', ['who', 'my']);//bu string yozgan soziz borligini aniqlab beradi.
        echo "<pre>";
        print_r[$contains];
    }*/
    /*public function practice(Request $request){
        $result = Str::endsWith('This is my name my', 'my'); //bu string yozgan soziz oxirida borligini aniqlab beradi.
        echo "<pre>";
        print_r[$result];
    }*/
    /*public function practice(Request $request){
        $result = Str::endsWith('This is my name', ['my', 'name']); //bu string yozgan soziz oxirida borligini aniqlab beradi.
        echo "<pre>";
        print_r[$result];
    }*/
    /*public function practice(Request $request){
        $adjusted = Str::finish('this-string', '/');//tushunmadim
        echo "<pre>";
        print_r[$adjusted];
    }*/
   /* public function practice(Request $request){
        $matches = Str::is('ab', 'abc');//tushunmadim
        echo "<pre>";
        print_r[$matches];
    }*/
    /*public function practice(Request $request){
        $isAscii = Str::isAscii('Taylor');//bu harflar tugriligiga qarab true yoki false javobini qaytaradi
        echo "<pre>";
        print_r[$isAscii];
    }*/
   /* public function practice(Request $request){
        $isUuid = Str::isUuid('abc');//tushunmadim
        echo "<pre>";
        print_r[$isUuid];
    }*/
   /* public function practice(Request $request){
        $converted = Str::kebab('myItEdu');//bu string yozgan sozlarizni dash qoshib beradi
        echo "<pre>";
        print_r[$converted];
    }*/
   /* public function practice(Request $request){
        $length = Str::length('Laravelone');//bu string yozgan sozlarizni nechita harf ekanini bildiradi
        echo "<pre>";
        print_r[$length];
    }*/
    /*public function practice(Request $request){
        $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 50);//bu string yozgan sozlarizdan keyin qanchasini korsatishda limit qilish da yordam beradi
        echo "<pre>";
        print_r[$truncated];
    }*/
   /* public function practice(Request $request){
        $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (!!)');//bu string yozgan sozlarizdan keyin qanchasini korsatishda limit qilish da yordam beradi va oxirida bergan narsayizni qoshib beradi
        echo "<pre>";
        print_r[$truncated];
    }*/
    /*public function practice(Request $request){
        $converted = Str::lower('LARAVEL');//bu string katta harflarni kichraytirib beradi
        echo "<pre>";
        print_r[$converted];
    }*/
    /*public function practice(Request $request){
        $plural = Str::plural('bar');//bu string birlikni koplik qilib beradi
        echo "<pre>";
        print_r[$plural];
    }*/
   /* public function practice(Request $request){
        $plural = Str::plural('bear', 1);//bu string birlikni koplik qilib beradi
        echo "<pre>";
        print_r[$plural];
    }*/
    /*public function practice(Request $request){
        $random = Str::random(1);//bu string aralashtirib harf va raqamlar beradi
        echo "<pre>";
        print_r[$random];
    }*/
    /*public function practice(Request $request){
        $string = 'The event will take place between ? and ?';
        $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string);//bu string belgini topib tuzatib beradi
        echo "<pre>";
        print_r[$replaced];
    }*/
   /*public function practice(Request $request){
        $replaced = Str::replaceFirst('the', 'a', 'the quick brown fox jumps over the lazy dog');//bu string qidirayotgan narsayizni topib va sizga boshqa so'zga almashtirib beradi
        echo "<pre>";
        print_r[$replaced];
    }*/
/////////////////////ARRAYS///////////////////////////
    /*public function practice(Request $request){
        $isAccessible = Arr::accessible(['a' => 1, 'b' => 1]);//tushunmadim
        echo "<pre>";
        print_r[$isAccessible];
    }*/
    /*public function practice(Request $request){
        $isAccessible = Arr::accessible(new Collection);//tushunmadim
        echo "<pre>";
        print_r[$isAccessible];
    }*/
   /* public function practice(Request $request){
        $isAccessible = Arr::accessible('abc');//tushunmadim
        echo "<pre>";
        print_r[$isAccessible];
    }*/

   /* public function practice(Request $request){
        $isAccessible = Arr::accessible(new stdClass);//tushunmadim
        echo "<pre>";
        print_r[$isAccessible];
    }*/

   /* public function practice(Request $request){
        $array = Arr::add(['name' => 'Desk'], 'price', 100);//tushunmadim
        echo "<pre>";
        print_r[$array];
    }*/

   /* public function practice(Request $request){
        $array = Arr::collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);//nomerlarni qoshib beradi
        echo "<pre>";
        print_r[$array];
    }*/

    /*public function practice(Request $request){
        $matrix = Arr::crossJoin([1, 2], ['a', 'b']);//tushunmadim
        echo "<pre>";
        print_r($matrix);
    }*/

   /* public function practice(Request $request){
        $matrix = Arr::crossJoin([1, 2], ['a', 'b'], ['I', 'II']);//tushunmadim
        echo "<pre>";
        print_r($matrix);
    }*/

   /* public function practice(Request $request){
        [$keys, $values] = Arr::divide(['name' => 'Desk']);//tushunmadim
        echo "<pre>";
        print_r($keys);
    }*/

  /*  public function practice(Request $request){
        $array = ['products' => ['desk' => ['price' => 100]]];//tushunmadim
        $flattened = Arr::dot($array);
        echo "<pre>";
        print_r($flattened);
    }  */

   /* public function practice(Request $request){
        $array = ['name' => 'Desk', 'price' => 100];//tushunmadim
        $filtered = Arr::except($array, ['price']);
    echo "<pre>";
    print_r($filtered);
    }*/

   /* public function practice(Request $request){
        $array = ['name' => 'John Doe', 'age' => 17];
        $exists = Arr::exists($array, 'name');//tushunmadim
        echo "<pre>";
        print_r($exists);
    }*/

    /*public function practice(Request $request){
        $array = ['name' => 'John Doe', 'age' => 17];
        $exists = Arr::exists($array, 'salary');//tushunmadim
        echo "<pre>";
        print_r($exists);
    }*/
    /*public function practice(Request $request){
        $array = [100, 200, 300];
        $first = Arr::first($array, function ($value, $key) {
            return $value >= 150;//tushunmadim
        });
        echo "<pre>";
        print_r($first);*/

   /* public function practice(Request $request){
        $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];
        $flattened = Arr::flatten($array);;//valuelarni topish
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $array = ['products' => ['desk' => ['price' => 100]]];
        Arr::forget($array, 'products.desk');//arrayni topish
        echo "<pre>";
        print_r($array);
    }*/
   /* public function practice(Request $request){
        $array = ['products' => ['desk' => ['price' => 100]]];
        $price = Arr::get($array, 'products.desk.price');//arrayni ajratib olish
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $array = ['products' => ['desk' => ['price' => 100]]];
        $discount = Arr::get($array, 'products.desk.discount', 0);//tushunmadim
        echo "<pre>";
        print_r($discount);
    }*/
   /* public function practice(Request $request){
        $array = ['product' => ['name' => 'Desk', 'price' => 100]];
        $contains = Arr::has($array, 'product.name');//tushunmadim
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $array = ['product' => ['name' => 'Desk', 'price' => 100]];
        $contains = Arr::hasAny($array, 'product.name');//tushunmadim
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $isAssoc = Arr::isAssoc(['product' => ['name' => 'Desk', 'price' => 100]]);//tushunmadim
        echo "<pre>";
        print_r($isAssoc);
    }*/

    /*public function practice(Request $request)
    {$array = [100, 200, 300, 110];
        $last = Arr::last($array, function ($value, $key) {
            return $value >= 150;
        });*/
   /* public function practice(Request $request){
        $array = ['name' => 'Desk', 'price' => 100, 'orders' => 10];
        $slice = Arr::only($array, ['name', 'price']);//tushunmadim
        echo "<pre>";
        print_r($slice);
    }*/
    public function practice(Request $request){
        $array = [
            ['developer' => ['id' => 1, 'name' => 'Taylor']],
            ['developer' => ['id' => 2, 'name' => 'Abigail']],
=======
        return view("airports", compact('parms'));
    }

    public function resume(Request $request){
        return view('professional.resume');
    }
    public function contactus(){
        $parms = [
            'name'=>'Jon'
>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c
        ];
        $names = Arr::pluck($array, 'developer.name');//tushunmadim
        echo "<pre>";
        print_r($names);
    }
<<<<<<< HEAD
   /* public function practice(Request $request){
        $array = ['one', 'two', 'three', 'four'];
        $array = Arr::prepend($array, 'zero');//aarayni joyma joy qoyish
        echo "<pre>";
        print_r($array);
    }*/
    /*public function practice(Request $request){
        $array = ['price' => 100];
        $array = Arr::prepend($array, 'Desk', 'name');//aarayni joyma joy qoyish
        echo "<pre>";
        print_r($array);
    }*/
    /*public function practice(Request $request){
        $array = ['name' => 'Desk', 'price' => 100];
        $name = Arr::pull($array, 'name');//aaraydagi sonni topish
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $array = ['name' => 'Taylor', 'order' => ['column' => 'created_at', 'direction' => 'desc']];
        Arr::query($array);//tushunmadim
        echo "<pre>";
        print_r($array);
    }*/

  /*  public function practice(Request $request){
        $array = [1, 2, 3, 4, 5];
        $random = Arr::random($array);//tushunmadim
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $array = ['products' => ['desk' => ['price' => 100]]];
        Arr::set($array, 'products.desk.price', 200);//tushunmadim
        echo "<pre>";
        print_r($array);
    }*/
   /* public function practice(Request $request){
        $array = Arr::shuffle([1, 2, 3, 4, 5]);//raqamlarni aralashtirsh
        echo "<pre>";
        print_r($array);
    }*/

    /*public function practice(Request $request){
        $array = ['Desk', 'Table', 'Chair'];
        $sorted = Arr::sort($array);//araylarni raqamlar bilan joylashtirish
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $array = [
            ['Roman', 'Taylor', 'Li'],
            ['PHP', 'Ruby', 'JavaScript'],
            ['one' => 1, 'two' => 2, 'three' => 3],
        ];

        $sorted = Arr::sortRecursive($array);//araylarni raqamlar bilan joylashtirish
        echo "<pre>";
        print_r($array);
    }*/

   /* public function practice(Request $request){
        $string = 'Laravel';
        $array = Arr::wrap($string);//araylarni raqamlar bilan joylashtirish
        echo "<pre>";
        print_r($array);
    }*/
 /*   public function practice(Request $request){
        $nothing = null;
        $array = Arr::wrap($nothing);//araylarni raqamlar bilan joylashtirish
        echo "<pre>";
        print_r($array);
    }*/


  /* public function practice(Request $request){
        $data = ['products' => ['desk' => ['price' => 100]]];
        data_fill($data, 'products.desk.price', 200);//araylarni raqamlar bilan joylashtirish
        echo "<pre>";
        print_r($data);
    }*/













=======
>>>>>>> c541f6a3b7a38764fd1e64c3414b3e9289fbbd5c

}












