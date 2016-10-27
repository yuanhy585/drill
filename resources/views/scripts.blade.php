<script>
    $("#province_id").change(function(){
       var province_id = $('#province_id').val();
        $.ajaxSetup({
            headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'}
        });
        $.ajax({
           type:'POST',
            url:'/ajax/province',
            data:{province_id:province_id},
            dataType:'json',
            success:function (data) {
                var strCity = '';
                $.each(data, function (i) {
                    strCity += '<option value="';
                    strCity += data[i].id;
                    strCity += '">';
                    strCity += data[i].name;
                    strCity += '</option>';
                });
                $('#cities').html('');
                $('#cities').append(strCity);
            },
            error:function (xhr, type) {
                alert('错误！')
            }
        });
    });
</script>

<script>
    $("#class_id").change(function(){
        var class_id = $("#class_id").val();
        $.ajaxSetup({
            headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'}
        });
        $.ajax({
            type:'POST',
            url:'/ajax/classes',
            data:{class_id:class_id},
            dataType:'json',
            success:function(data){
                var strStudent = '';
                $.each(data, function(i){
                    strStudent += '<option value="';
                    strStudent += data[i].id;
                    strStudent += '">';
                    strStudent += data[i].name;
                    strStudent += '</option>';
                });
                $('#students').html('');
                $('#students').append(strStudent);
            },
            error:function(xhr,type){
                alert('错误！')
            }
        });
    });
</script>