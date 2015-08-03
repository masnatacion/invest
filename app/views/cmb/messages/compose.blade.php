
	<form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">From : </label>
		    {{ Auth::customer()->get()->name }}
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">To</label>
		    <input type="email" value="{{ Auth::customer()->get()->email }}" class="form-control" id="exampleInputPassword1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Subject</label>
		    <input value= "{{ Auth::customer()->get()->state }}" type="name" class="form-control" id="exampleInputEmail1" placeholder="State">
		    
		  </div>		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Body</label>
		    <textarea class="form-control" placeholder="Address" name="address" cols="50" rows="10">{{ Auth::customer()->get()->address }}</textarea>
		    
		  </div>
		
		  <button type="submit" class="btn btn-lg btn-success">Send</button>
		</form>