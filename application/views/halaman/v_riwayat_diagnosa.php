            
  <div class="container ">
           
            <div class="card mt-5   w-35 h-70" style="margin-bottom:16rem" id="kartu">
                <div class="card-body p-4">
                            
                    <h3 class="text-center">Hasil Diagnosa</h3>
                    <hr style="background-color:black">
                        
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tangggal Diagnosa</th>
                                <th scope="col">Penyakit</th>
                                <th scope="col">Presentase</th>
                                <th style="width:40%"  scope="col">Gejala</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($hasil as $key => $value) {?>
                                    
                                    <tr>
                                        <th scope="row"><?php echo $key+1?></th>
                                        <td><?php echo $value['Tanggal'];?></td>
                                        <td><?php echo $value['Nama_Penyakit'];?></td>
                                        <td><?php echo $value['presentase'];?>%</td>
                                        <td style="word-break: break-all;" class="text-left"><?php  echo str_replace('|', '<br/><br/>', $value['Nama_Gejala']);?></td>
                                    </tr>

                                <?php }
                                ?>
                                
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>

</div>          
            