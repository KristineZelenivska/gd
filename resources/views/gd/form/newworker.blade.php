<h4> Add new worker</h4>
<form method="POST"> 
  @csrf
<input  type="text" name="name" placeholder="Name" require/>
      <input  type="text" name="position" placeholder="Position" require/>
      <input  type="text" id="exampleFormControlTextarea1" name="contact" placeholder="Contact" rows="3" require/>
  <input class="btn btn-secondary" type="submit" name="submit" value="Add" />
    </form>


