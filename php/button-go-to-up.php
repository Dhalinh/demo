<style type="text/css">
	.ir-arriba{
  width: 50px;
  height: 50px;
  border-radius: 100px;
  text-align: center;
  display:none;
  padding: 0.5% 0%;
  background-repeat:no-repeat;
  font-size:25px;
  background-color: #0080ce;
  cursor:pointer;
  position:fixed;
  bottom:3%;
  right:3%;
  z-index:2;
  color: #fff!important;

}

@media(max-width: 768px ){
  .ir-arriba{
    padding: 1% 0%;
  }
}

@media(max-width: 425px ){
  .ir-arriba{
    padding: 1.5% 0%;
  }
}

@media(max-width: 414px ){
  .ir-arriba{
    padding: 1.8% 0%;
  }
}

</style>
<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
   <i class="fas fa-chevron-up"></i>
</a>

<script type="text/javascript">
	  $(document).ready(function(){ //Hacia arriba
  irArriba();
});

function irArriba(){
  $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
  $(window).scroll(function(){
    if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
  });
  $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
}
</script>