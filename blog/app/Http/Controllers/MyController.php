<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function hello()
    {
        echo "hello man!!!";

    }
    public function testview()
    {
        return view('Myview');
    }
    public function name($name)
    {
        return view('Myview',['name'=>$name]);
    }
    //cho in 1 dong chu ra man hinh
    public function xinchao2()
    {
        return "hello anh Cam";
    }
    //in ra dang text/abc thi in ra abc.
    public function inramanhinh($time)
    {
        return view('inramanhinh',['t'=>$time]);
    }
    public function blade($a)
    {   if($a == 'laravel')
        {
            return view('pages.laravel');
        }
        else if ($a == 'php')
        {
            return view('pages.php');
        }
        else if ($a == 'PHP')
        {
            return view('pages.php');
        }
    }
    public function oddoreven($num)
    {
    return view('test.oddoreven',['num'=>$num]);
    }
    public function array($ar)
    {
        $haha = [];
        $haha  = explode('-',$ar);
        
    return view('test.array',['ar'=>$haha]);

        // $params contains all parameters

}
    public function admin2($ad)
    {
        {   if($ad == 'user')
            {
                return view('pages.useradmin');
            }
            else if ($ad == 'news')
            {
                return view('pages.newsadmin');
            }
            else if ($a == 'comment')
            {
                return view('pages.commentadmin');
            }
        }
    } 
}
