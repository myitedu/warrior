<?php

namespace App\Http\Controllers;


use App\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PublicController extends Controller
{
    public function airports(Request $request,$country ='Uzbekistan'){
        $input = $request->all();
        $airports = Airport::where('country','like','%'.$country.'%')->get();
        $parms = [
            'country' => $country,
            'input' => $input,
            'airports' => $airports
        ];

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
        return[$result];
    }*/
   /* public function practice(Request $request){
        $result = Str::ascii('û');//noaniq harflarni tuzatib beradi
        echo "<pre>";
        return[$result];
    }*/
    /*public function practice(Request $request){
        $result = Str::beforeLast('This is my name', 'my');//bu string qidirayotgan sozidan oldin nimaligini korsatadi
        echo "<pre>";
        return[$result];
    }*/
    /*public function practice(Request $request){
        $slice = Str::between('This is my name', 'This', 'name');//bu string yozgan sozlarizni ortasida qaysi sozlar borligini korsatadi
        echo "<pre>";
        return[$slice];
    }*/
  /* public function practice(Request $request){
        $converted = Str::camel('my-it-edu');//bu string yozgan sozlardagi chiziqlarni uchirib qoshib yozadi
        echo "<pre>";
        return[$converted];
    }*/
    /*public function practice(Request $request){
        $contains = Str::contains('This is my name', 'my');//bu string yozgan soziz borligini aniqlab beradi.
        echo "<pre>";
        return[$contains];
    }*/
    /*public function practice(Request $request){
        $contains = Str::contains('This is my name', ['who', 'my']);//bu string yozgan soziz borligini aniqlab beradi.
        echo "<pre>";
        return[$contains];
    }*/
    /*public function practice(Request $request){
        $result = Str::endsWith('This is my name my', 'my'); //bu string yozgan soziz oxirida borligini aniqlab beradi.
        echo "<pre>";
        return[$result];
    }*/
    /*public function practice(Request $request){
        $result = Str::endsWith('This is my name', ['my', 'name']); //bu string yozgan soziz oxirida borligini aniqlab beradi.
        echo "<pre>";
        return[$result];
    }*/
    /*public function practice(Request $request){
        $adjusted = Str::finish('this-string', '/');//tushunmadim
        echo "<pre>";
        return[$adjusted];
    }*/
   /* public function practice(Request $request){
        $matches = Str::is('ab', 'abc');//tushunmadim
        echo "<pre>";
        return[$matches];
    }*/
    /*public function practice(Request $request){
        $isAscii = Str::isAscii('Taylor');//bu harflar tugriligiga qarab true yoki false javobini qaytaradi
        echo "<pre>";
        return[$isAscii];
    }*/
   /* public function practice(Request $request){
        $isUuid = Str::isUuid('abc');//tushunmadim
        echo "<pre>";
        return[$isUuid];
    }*/
   /* public function practice(Request $request){
        $converted = Str::kebab('myItEdu');//bu string yozgan sozlarizni dash qoshib beradi
        echo "<pre>";
        return[$converted];
    }*/
   /* public function practice(Request $request){
        $length = Str::length('Laravelone');//bu string yozgan sozlarizni nechita harf ekanini bildiradi
        echo "<pre>";
        return[$length];
    }*/
    /*public function practice(Request $request){
        $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 50);//bu string yozgan sozlarizdan keyin qanchasini korsatishda limit qilish da yordam beradi
        echo "<pre>";
        return[$truncated];
    }*/
   /* public function practice(Request $request){
        $truncated = Str::limit('The quick brown fox jumps over the lazy dog', 20, ' (!!)');//bu string yozgan sozlarizdan keyin qanchasini korsatishda limit qilish da yordam beradi va oxirida bergan narsayizni qoshib beradi
        echo "<pre>";
        return[$truncated];
    }*/
    /*public function practice(Request $request){
        $converted = Str::lower('LARAVEL');//bu string katta harflarni kichraytirib beradi
        echo "<pre>";
        return[$converted];
    }*/
    /*public function practice(Request $request){
        $plural = Str::plural('bar');//bu string birlikni koplik qilib beradi
        echo "<pre>";
        return[$plural];
    }*/
   /* public function practice(Request $request){
        $plural = Str::plural('bear', 1);//bu string birlikni koplik qilib beradi
        echo "<pre>";
        return[$plural];
    }*/
    /*public function practice(Request $request){
        $random = Str::random(1);//bu string aralashtirib harf va raqamlar beradi
        echo "<pre>";
        return[$random];
    }*/
    /*public function practice(Request $request){
        $string = 'The event will take place between ? and ?';
        $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string);//bu string belgini topib tuzatib beradi
        echo "<pre>";
        return[$replaced];
    }*/
   public function practice(Request $request){
        $replaced = Str::replaceFirst('the', 'a', 'the quick brown fox jumps over the lazy dog');//bu string qidirayotgan narsayizni topib va sizga boshqa so'zga almashtirib beradi
        echo "<pre>";
        return[$replaced];
    }

}
