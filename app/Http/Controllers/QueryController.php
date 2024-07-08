<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QueryController extends Controller
{
    function index(){
        $books=DB::table('books')->get();
        $books=DB::table('authors')->get();
        //$books=DB::table('authors')->count(); for counting authors
        //$books=DB::table('authors')->limit(2)->get(); //if u want to see first two authors
        // $books=DB::table('books')->limit(2)->offset(2)->get(); //it means 2nd row theke porer duita show korbe
        // $books=DB::table('books')->where('id',1)->get(); //where condition
        // $books=DB::table('books')->where('id',"<=",8)->get(); //where condition,where id less than equal to 8
        //where id<5 and price<1000
        // $books=DB::table('books')->where([
        //     ['id',"<",5],
        //     ['price',"<",1000]
        // ])->get();
       //where price =12:
       //$books = DB:: table ('books')->where('price',12)->get()
       //$books = DB:: table ('books')->wherePrice'(12)->get()
      
       //where book id >=3 and <=7:
       //$books = DB:: table ('books')->whereBetween('id',[3,7])->get()
       //another way:
       //$books=DB::table('books')
       //->where('id','>=',3)
       //->where('id','<=',7)
       //->get();

       //where id=3 or id=7:
       //$books = DB:: table ('books')->whereIn('id',[3,7])->get()

       //another-way
       //$books = DB:: table ('books')->where('id',3)->orWhere('id',7)->get()



        return response()->json($books);
        //return response()->json($authors);
        //return response()->json($count);
        //another ways to return data from database table
        //return $books;
        //return response ($books);
    }
}
