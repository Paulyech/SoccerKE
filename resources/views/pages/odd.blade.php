@extends('layouts.app')

@section('content')
<div class="h-screen flex items-center" style="background-image: url('../images/background5.jpg');background-size:cover;min-height:90vh;background-position:center;">
    



    <div class="flex justify-center items-center pt-20  " >
         <table class="border-collapse border-gray-200 border capitalize w-full md:w-3/5 table-fixed sm:h-3/5 text-white ">
            <tr class="text-xl ">
                <th class="border border-gray-600">time</th>
                <th class="border border-gray-600" >league</th>
                <th class="border border-gray-600">match</th>
                <th  class="border border-gray-600">prediction</th>
            </tr>
            <tr id="row-td" class="font-semibold">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">la liga</td>
                <td  class="border border-gray-600">barca vs eibar</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">serie a</td>
                <td  class="border border-gray-600">Napoli vs Roma</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">Epl</td>
                <td  class="border border-gray-600">Chelsea vs Manchester united</td>
                <td  class="border border-gray-600">2</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">Bundesliga</td>
                <td  class="border border-gray-600">bayern munch vs Lerverkusen</td>
                <td  class="border border-gray-600">1</td>
            </tr>
            <tr id="row-td">
                <td class="border border-gray-600" >1900hrs</td>
                <td  class="border border-gray-600">Eredivise</td>
                <td  class="border border-gray-600">Ajax vs AZ</td>
                <td  class="border border-gray-600">x</td>
            </tr>
            
         </table>
     </div>
    </div>
   
@endsection