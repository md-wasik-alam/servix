@extends('admin.layout.base')



@section('content')

<div class="ml-40">
  <div class="row">
    <h2 class="text-black-100">Insert Staff</h2>
    <a href="{{route('admin.staff.manage')}}" class="text-black-100">Go Back</a>
  </div>
  <div class="container">
     {{-- form here --}}
     
                              <form action="{{route('admin.staff.store')}}" method="post">
                                  @csrf
                                  <div class="row">
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Name</label>
                                          <div class="flex">
                                              <input type="text" name="name" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Email</label>
                                          <div class="flex">
                                              <input type="email" name="email" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="example@gmail.com">
                                          </div>
                                      </div>
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Contact</label>
                                          <div class="flex">
                                              <input type="number" name="contact" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Salary</label>
                                          <div class="flex">
                                              <input type="text" name="salary" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Addhar no</label>
                                          <div class="flex">
                                              <input type="text" name="addhar" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Pan card no</label>
                                          <div class="flex">
                                              <input type="text" name="pan" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Address</label>
                                          <div class="flex">
                                              <input type="text" name="salary" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Status</label>
                                          <div class="flex">
                                              <input type="text" name="salary" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="w-full px-3 mb-5">
                                          <label for="" class="text-black-100">Password</label>
                                          <div class="flex">
                                              <input type="password" name="password" class="w-full  pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="w-full px-3 mb-5">
                                          <div class="flex">
                                            <input type="submit" name="submit" class="text-black-100"/>
                                          </div>
                                      </div>
                                  </div>
                                
                              </form>
                         
     {{-- form end --}}

  </div>
</div>
@endsection
