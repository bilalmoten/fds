// JavaScript code goes here
document.addEventListener('DOMContentLoaded', function() {
    var icons = document.querySelectorAll('.social-icons a');
  
    function createRipple(event) {
      var ripple = document.createElement('span');
      ripple.classList.add('ripple');
      this.appendChild(ripple);
      
      var size = Math.max(this.offsetWidth, this.offsetHeight);
      ripple.style.width = size + 'px';
      ripple.style.height = size + 'px';
      
      var x = event.pageX - this.offsetLeft - size / 2;
      var y = event.pageY - this.offsetTop - size / 2;
      ripple.style.top = y + 'px';
      ripple.style.left = x + 'px';
      
      setTimeout(function() {
        ripple.remove();
      }, 800);
    }
  
    icons.forEach(function(icon) {
      icon.addEventListener('mouseenter', createRipple);
    });
  });
  