<style>
.rdi {
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-items: center;
    width: fit-content;
}


.rdi .idr {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rdi .idr:last-child {
  position: static;
}

.rdi .idr:nth-child(1) {
  z-index: 14;
}

.rdi .idr:nth-child(2) {
  z-index: 13;
}

.rdi .idr:nth-child(3) {
  z-index: 12;
}

.rdi .idr:nth-child(4) {
  z-index: 11;
}

.rdi .idr:nth-child(5) {
  z-index: 10;
}

.rdi .idr input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rdi .idr .icon {
  float: left;
  color: transparent;
}

.rdi .idr:last-child .icon {
  color: #000;
}

.rdi:not(:hover) .idr input:checked ~ .icon,
.rdi:hover .idr:hover input ~ .icon {
  color: #09f;
}

.rdi .idr input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}</style>

<form class="rdi">
<label>Order id:</label>
    <input type="text" autocomplete="off" name='orderq' >
    <label>Review:</label>
    <input class="in" type="text" name="review" placeholder="Add review">
    <label>Buyer id:</label>
    <input class="in" type="text" name='buyerid' > 
    <label>Buyer Name:</label>
    <input class="in" type="text" name='buyername' > 
    <label>Product id:</label>
    <input class="in" type="text" name='productid' > 
<label class="idr">
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label class="idr">
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label class="idr">
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label class="idr">
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label class="idr">
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</form>

<script>
    $(':radio').change(function() {
  console.log('New star rdi: ' + this.value);
});
</script>