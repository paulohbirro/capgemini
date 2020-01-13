<?php

namespace App\Http\Controllers;

use App\Employes;
use Illuminate\Http\Request;
use Goutte\Client;
use App\Http\Controllers\Controller;


/**
 * @SWG\Info(
 *   version="1.0.0",
 *   title="Api teste capgemini Funcionários",
 * )
 *
 */

class EmployesController extends Controller
{
  
    /**
    * @SWG\Get(
    *     path="/employes/{countrie}",
    *     summary="Retorna Funcionarios Brasil",
    *     tags={"Funcionarios"},
    *     description="Busca todos funcionarios de acordo com país",
    *     operationId="findPetsByTags",
    *     produces={"application/xml", "application/json"},
    *     @SWG\Parameter(
    *         name="countrie",
    *         in="path",
    *         description="Brasil = 1 Chile = 2 Paraguai = 3",
    *         required=true,
    *         type="string",
    *     ),
    *  
    *     @SWG\Response(
    *         response=200,
    *         description="Operação Realizada Com sucesso!",
    *        
    *     ),
    * )
    */
    public function index(Request $request,$id)
    {

        $teste = Employes::with('countries')->where('countrie_id',$id)->get();
        
        return response()->json($teste,200);
         
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function show(Employes $employes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employes $employes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employes  $employes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employes $employes)
    {
        //
    }
}
