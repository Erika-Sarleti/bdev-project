<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\UserInfo;
use Illuminate\Http\Request;
use App\Review;

class ApiController extends Controller
{
    use \App\Traits\searchFilter;

    public function index(Request $request)
    {


        $result = $this->queryComposer($request);
        $review = Review::all();
        $ciao = $result->toSql();
        $result = $result ->with([
            'user' => function ($query1) {$query1->select('id', 'name', 'surname');},
         ])->paginate(20);
        $user_id = [];
        if($request->nreview && $request->mediarating){
            foreach ($result as $user) {
                $user_id[] = $user->user->id;
            }
            $dati = $review->whereIn('user_id', $user_id)->groupBy('user_id');
            
                foreach ($dati as $key => $user) {
                    if(count($user) < $request->nreview) {
                        unset($dati[$key]);
                    }
                };
            $nreview = 0;
            foreach ($dati as $key => $user) {
                
                for($i = 0; $i < count($user); $i++){
                    $nreview = $nreview + $user[$i]['rating'];
                    
                }
    
                if(round($nreview / count($user)) < $request->mediarating){
                    unset($dati[$key]);
                }
                
                $nreview = 0;
            }
            return response()->json([
                'status'    => 'success',
                'response'  => $dati,
                'sql'       => $result
            ]);
        };
        if ($request->nreview) {

            foreach ($result as $user) {
                $user_id[] = $user->user->id;
            }
            $dati = $review->whereIn('user_id', $user_id)->groupBy('user_id');
            
                foreach ($dati as $key => $user) {
                    if(count($user) < $request->nreview) {
                        unset($dati[$key]);
                    }
                }
            return response()->json([
                'status'    => 'success',
                'response'  => $dati,
                'sql'       => $result
            ]);
        }

        if ($request->mediarating){
            foreach ($result as $user) {
                $user_id[] = $user->user->id;
            }
            $dati = $review->whereIn('user_id', $user_id)->groupBy('user_id');
            $nreview = 0;
                foreach ($dati as $key => $user) {
                    
                    for($i = 0; $i < count($user); $i++){
                        $nreview = $nreview + $user[$i]['rating'];
                       
                    }
                    // dd($nreview);
                    if(round($nreview / count($user)) < $request->mediarating){
                        unset($dati[$key]);
                    }
                    
                    $nreview = 0;
                }
                return response()->json([
                    'status'    => 'success',
                    'response'  => $dati,
                    'sql'       => $result
                ]);
                
        }

        else {
            return response()->json([
                'status'    => 'success',
                'response'  => $result,
                'sql'       => $ciao
            ]);
        }



    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
