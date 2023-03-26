@extends('layouts.layout')


<!-- Admin Login Form -->
@section('contents')
<div class="h1 pb-10 flex bg-gray-900 min-h-screen justify-center items-center mt-12">
    <div class="container justify-around ">
        <div class="w-full justify-around items-center  flex">
            <div class="card bg-black w-5/6 rounded overflow-hidden mt-7">
                <div class="min-w-screen bg-gray-900 flex items-center justify-center px-5 py-5">
                    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
                        <div class="md:flex w-full">
                            <div class="w-full py-10 px-5 md:px-10">
                                <div class="text-center mb-10">
                                    <h1 class="font-bold text-3xl text-gray-900">Service Request</h1>
                                </div>
                            <div>
                            <form action="" method="POST">
                                @csrf
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-5">
                                        <label for="" class="text-xs font-semibold px-1">Owner Name</label>
                                        <div class="flex">
                                            <input type="text" name="" class="w-full  pl-5 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Product Name</label>
                                        <div class="flex">
                                            <input type="text" name="product_name" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" >
                                        </div>
                                    </div>
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Brand</label>
                                        <div class="flex">
                                            <input type="text" name="brand" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Product Type</label>
                                        <div class="flex">
                                            <input type="text" name="product_type" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" >
                                        </div>
                                    </div>
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Color</label>
                                        <div class="flex">
                                            <input type="text" name="color" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                                        </div>
                                    </div>
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Serial No.</label>
                                        <div class="flex">
                                            <input type="text" name="serial_no" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                                        </div>
                                    </div>
                                </div>


                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">MAC</label>
                                        <div class="flex">
                                            <input type="text" name="mac" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" >
                                        </div>
                                    </div>
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Status</label>
                                        <div class="flex">
                                            <input type="text" name="status" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" value="processing..">
                                        </div>
                                    </div>
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Date of Creation</label>
                                        <div class="flex">
                                            <input type="text" name="date_of_creation" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                                        </div>
                                    </div>
                                    <div class="w-full px-3 mb-4">
                                        <label for="" class="text-xs font-semibold px-1">Estimated Delihivery</label>
                                        <div class="flex">
                                            <input type="text" name="estimate_delivery_date" class="w-full  pl-3 pr-1 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-5">
                                        <label for="" class="text-xs font-semibold px-1">Problem</label>
                                        <div class="flex">
                                            <textarea type="text" name="problem" class="w-full cols-12 pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full justify-center items-center text-center">
                                <div class="flex ">
                                    <div class="w-full px-3 mb-5">
                                        <label for="" class="text-xs font-semibold px-1">Technician Id</label>
                                        <div class="flex">
                                            <input type="text" name="technician_id" class=" pl-3 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                  <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-5">
                                        <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Submit</button>
                                    </div>
                                  </div>
                            </form>
                              <div class="flex -mx-3">
                              <div class="w-full px-3 mb-5">
                                    <div class="text-center items-center flex justify-center">
                                        <span class="text-xs">Is New user ? </span>
                                        <span class="font-semibold text-blue-600 mx-2"><a href="">-    Register User</a></span>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
 </div>


</div>
@endsection


<!-- , , date_of_creation, , estimate_delivery_date , -->
<!-- problem -->
<!-- technician_id -->