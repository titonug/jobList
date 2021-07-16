<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Libraries\Curl;

class ListController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        try {
            $title = "Index";
            $titleContent = "Selamat Datang";
            $headers = [
                "Content-Type: application/json; charset=UTF-8"
            ];
            $method = "GET";
            $data_array = "";
            $curl = new curl();
            $data = $curl->curl('.json', $headers, $method, $data_array);
            $url = $curl->url;
            
            Log::channel('mylog')->info('Endpoint API' . $url . '.json?METHOD='.$method, ['All', 'Result:Success']);

            return view('list.index')
                ->with('data', $data)
                ->with('title', $title)
                ->with('titleContent', $titleContent);
        } catch (Exception $exception) {
            Log::channel('mylog')->info('Endpoint API' . $url . '.json?METHOD='.$method, ['All', 'Result:Error']);
            return "Not Found";
        }
    }

    public function search(Request $request)
    {
        
        try {
            $title = "Index";
            $titleContent = "Selamat Datang";
            $headers = [
                "Content-Type: application/json; charset=UTF-8"
            ];
            $method = "GET";
            $data_array = "";
            $curl = new curl();
            $data = $curl->curl('.json?description='.$request->description.'&location='.$request->location, $headers, $method, $data_array);
            $url = $curl->url;
            
            Log::channel('mylog')->info('Endpoint API' . $url . '.json?Description='.$request->description.'&location='.$request->location.'?METHOD='.$method, 
            ['Description='.$request->description.'&location='.$request->location, 'Result:Success']);

            return view('list.index')
                ->with('data', $data)
                ->with('title', $title)
                ->with('titleContent', $titleContent);
        } catch (Exception $exception) {
            Log::channel('mylog')->info('Endpoint API' . $url . '.json?Description='.$request->description.'&location='.$request->location.'?METHOD='.$method, 
            ['Description='.$request->description.'&location='.$request->location, 'Result:Error']);
            return "Not Found";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        try {
            
            $title = "Show";
            $titleContent = "This is information about";
            $headers = [
                "Content-Type: application/json; charset=UTF-8"
            ];
            $method = "GET";
            $data_array = "";
            $curl = new curl();
            $data = $curl->curl('/'.$id, $headers, $method, $data_array);
            $url = $curl->url;

            Log::channel('mylog')->info('Endpoint API' . $url . '/' . $id, ['ID=' . $id, 'Result:Success']);
            return view('list.show')
                ->with('data', $data)
                ->with('titleContent', $titleContent)
                ->with('title', $title);
        } catch (Exception $exception) {
            Log::channel('mylog')->info('Endpoint API' . $url . '/' . $id, ['ID=' . $id, 'Result:Error']);
            return "Not Found";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        //
    }
}
