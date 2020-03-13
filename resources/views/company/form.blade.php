
<label for="name">Name : </label>
<div class="input-group"  class="pb-2">

    <input type="text" name="name" value="{{old('name') ?? $company->name}}" class="form-control">

    <div>{{$errors->first('name')}}</div>
</div>

@csrf

<br>
