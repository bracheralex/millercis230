



    <label class="form-label" for ="name">Name</label>
     <input class="form-input" type="text" name="name" id="name" value="{{old('name',$character->name)}}">

        <label class="form-label" for ="birthday">Birthday</label>
           <input class="form-input" type="text" name="birthday" id="birthday" value="{{old('birthday', $character->birthday)}}" ></label>

      <label class="form-label" for ="occupation">Occupation</label>
           <input class="form-input" type="text" name="occupation" id="occupation" value="{{old('occupation', $character->occupation)}}" ></label>

              <label class="form-label" for ="status">Status</label>
           <input class="form-input" type="text" name="status" id="status" value="{{old('status', $character->status)}}" ></label>

                  <label class="form-label" for ="img">Image</label>
           <input class="form-input" type="text" name="img" id="status" value="{{old('img', $character->img)}}" ></label>

                 <label class="form-label" for ="age">Age</label>
                    <select class="form-select" name="age">
               @foreach (range(18,100) as $ageOption)
               <option value="{{$ageOption}}" {{in_array($ageOption, [$character->age, old('age')]) ? 'selected' : ''}} ></option>
                              <!-- <option value="{{$ageOption}}" {{$ageOption == old('age') ? 'selected' : '' }}>{{$ageOption}}</option> -->

               @endforeach
           </select>