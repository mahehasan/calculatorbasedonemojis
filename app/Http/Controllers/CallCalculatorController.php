<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CallCalculatorController extends Controller
{
    public function processCall(Request $request){
        $messages = [
            'required' => 'The :attribute field is required/integer.',
        ];
        $validator = Validator::make($request->all(), [
            'lho'=>'required|integer',
            'rho'=>'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //dd($request->input('lho'));
        $data = $this->exec($request);
        return response()->json($data,200);
	}

    protected function exec($request)
    {
        try {
            $lho = (int)$request->input('lho');
            $rho = (int)$request->input('rho');
            $op = $request->input('op');

            $resultArr = array();
            if($op=='add'){
                $resultArr['calcResult'] = ($lho+$rho);
                $resultArr['calcSummary'] = $lho . ' Alien 👽 ' . $rho . ' = ' . ($lho+$rho);
            }
            else if($op=='subtract'){
                $resultArr['calcResult'] = ($lho-$rho);
                $resultArr['calcSummary'] = $lho . ' Skull 💀 ' . $rho . ' = ' . ($lho-$rho);
            }
            else if($op=='multiply'){
                $resultArr['calcResult'] = ($lho*$rho);
                $resultArr['calcSummary'] = $lho . ' Ghost 👻 ' . $rho . ' = ' . ($lho*$rho);
            }
            else if($op=='divide'){
                $resultArr['calcResult'] = ($lho/$rho);
                $resultArr['calcSummary'] = $lho . ' Scream 😱 ' . $rho . ' = ' . ($lho/$rho);
            }
            else{
                throw new InvalidArgumentException(sprintf('"%s" is an invalid operation.', str_replace('_', '', $request->input('op'))));
            }
            return $resultArr;
        } catch (\Throwable $th) {
            return $th->__toString();
        }
    }
}
