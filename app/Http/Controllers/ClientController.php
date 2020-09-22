<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Http\Request;
// use Request;
use GuzzleHttp\Client;
use App\Patient;
use App\Record;
use Charts;
use DB;

class ClientController extends Controller
{
    public function test1()
    {
        echo"Everything is okeee:(";
    }
    public function start()
    {
        return view ('fornt.index');
    }
    public function login()
    {
        return view ('fornt.login');
    }
    public function working()
    {
        return view ('fornt.working');
    }

    public function signup()
    {
        return view ('fornt.Signup');
    }
    public function userdata()
    {
        $data  = new Record;
        $id  = 1;

        $found = Record::where('RPid',$id)->first();

        return view ('fornt.userdata', compact('data','data'));
    }
    public function test(Request $req)
    {
        $User = new Patient();
        $User->Firstname = $req->fname;
        $User->Lastname = $req->lname;
        $User->DateofBirth = $req->dob;
        $User->Age = $req->age;
        $User->Contactno = $req->cn;
        $User->CNIC = $req->cnic;
        $User->Address = $req->address;
        $User->Diseases = $req->dieases;
        $User->Hospital = $req->hospital;
        $User->City = $req->city;
        $User->Others = $req->others;
        $User->Hospital = $req->hospital;
        $User->Postalcode = $req->postalcode;
        $User->Email = $req->email;
        $User->Username = $req->username;
        $User->Password = $req->password;
        $User->save();
        return view ('fornt.login');
    }
    //
    public function Authen(Request $req)
    {
        $found = Patient::where('Username',$req->username)->where('Password',$req->password)->first();
        if($found!=Null)
        {
            $dele= $found->Record;
            return view ('fornt.client_protal',compact('found','dele'));
        }
        else
        {
            return view ('fornt.login');
        }
    }

    public function AddClientData(Request $req, $pid)
    {
        $del = new Record;

        $systolic = $req->hiper;
        $diastolic = $req->loper; // here i will two varible and save the data in it what user enter

        $del->RPid = $pid;
        $del->Hiper = $req->hiper;  // here am saving this user input in database
        $del->Loper = $req->loper;
        $del->Plusrate = $req->plusrate;
        $del->Status ='N/A';       // this is status who calculate the api....
        $Patient = Patient::where('Pid', $pid)->get()->first();
        $del->save();  //  dd($Patient,$del->id);

        $delId = $del->rid;

        // yaha pr ye update ek rcord ko kar raha hy lekin sth e ek blank status wali entry b kar raha hy.
        $flask_app_url = "https://eduarena.000webhostapp.com/cgi-bin/api.py";  // here is the api addresss

        $client = new Client();

        $res = $client->post($flask_app_url, [          //here am passing api parameter
            'json' => [
                'age' => 20,    // 
                'systolic' => $systolic,
                'diastolic' => $diastolic,  // this is parameter what user enter
                'weight' => 78,
                'height' => 5.6
                    ]
                ]);

        $data_body = $res->getBody();
        //echo $data_body;                    // here we display the output after calculation in array foramte of json
        $Result = json_decode($data_body,true);

        $temp = $Result['bp']; // here am separate the specific record what i need it
        $bmi = $Result['bm'];
        $bp=$Result['bp'];
       try {
        $newdel = Record::where('rid',$delId)->first();

        $newdel->Status = $temp;
        $newdel->BMI = $bmi;

        $newdel->save();
       } catch (\Throwable $th) {

           dd($th);
        }
        // redirect(Request::url());
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';
        // return redirect()->refresh();

        //return redirect()->back()->with('error', 'Something went wrong.');
}

    public function graphdata()
    {
    //     $products = Record::where(DB::raw("(DATE_FORMAT(created_at,'%H'))"), date('H'))->get();
    //     $chart = Charts::database($products, 'bar', 'highcharts')
    //                 ->title('Product Details')
    //                 ->elementLabel('Total Products')
    //                 ->dimensions(1000, 500)
    //                 ->groupBy(date('H'), true);
    //    return view('fornt.graph', ['chart' => $chart]);

        return view('fornt.graph');
    }


}
