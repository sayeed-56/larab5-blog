

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{ old('name',isset($author)?$author->name:null) }}" name="name" class="form-control" id="name" placeholder="Enter Author name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{old('email',isset($author)?$author->email:null) }}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Author email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" value="{{old('phone',isset($author)?$author->phone:null) }}" name="phone" class="form-control" id="phone" placeholder="Enter Author phone number">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea type="text"  name="address" class="form-control" id="address" placeholder="Enter Author Address" >{{ old('address',isset($author)?$author->address:null)}}</textarea>
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
