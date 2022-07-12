@props(['status'])

<select name="status" class="form-control" id="">
     
     <option value="{{ $status->status }}">{{ $status->status }}</option>
     <option value="ACTIVE">ACTIVE</option>
     <option value="WAITING">WAITING</option>
     <option value="SUSPENDED">SUSPENDED</option>
</select>