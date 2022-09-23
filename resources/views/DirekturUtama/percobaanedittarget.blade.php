<div class="col-md-6  mt-md-3">
                                <strong>Tahun: </strong>
                                    <select class="form-control form-control-sm" placeholder="tahun" name="tahun" id="tahun" required> 
                                        <option <?php if($tahun ==0) {echo 'selected';} ?>>Tahun</option>
                                        <option value="2000" @php if(($target->tahun)=='2000') echo 'selected'; @endphp>2000</option>
                                        <option value="2001"@php if(($target->tahun)== '2001') echo 'selected'; @endphp>2001</option>
                                        <option value="2002"@php if(($target->tahun)== '2002') echo 'selected'; @endphp>2002</option>
                                        <option value="2003"@php if(($target->tahun)== '2003') echo 'selected'; @endphp>2003</option>
                                  </select>
                                </div>   