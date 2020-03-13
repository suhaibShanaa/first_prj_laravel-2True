<label for="name">Name : </label>
<div class="input-group"  class="pb-2">
    <input type="text" name="name" value="{{ old('name') ?? $customer->name }}  " class="form-control">
    <div>{{$errors->first('name')}}</div>
</div>

<label for="email">Email : </label>
<div class="input-group" class="pb-2">
    <input type="text" name="email" value="{{ old('email') ?? $customer->email }}"  class="form-control">
    <div>{{$errors->first('email')}}</div>
</div>

<label for="company_id">Company : </label>
<div class="form-group" >

    <select name="company_s[]"   id="company_id"  class="form-control" multiple>
        <option value="" disabled>Select Company</option>
        @foreach( $companies as $comp)
            <option value={{$comp->id}}>{{$comp->name}}</option>
{{--            <option value={{$comp->id == 'id' ? 'selected' : ''}}>   {{$comp->name}}</option>   for show selected is in form --}}
        @endforeach
    </select>
</div>
@csrf

<br>
