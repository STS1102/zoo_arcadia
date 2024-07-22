document.addEventListener('DOMContentLoaded', function() {
    console.log('Document loaded');
});


document.getElementById('phone-contact').addEventListener('click', function() {
    window.location.href = 'tel:123-456-7890';
  });
  
  document.getElementById('address-contact').addEventListener('click', function() {
    window.open('https://maps.google.com/?q=123 chemin des Forêts, Brocéliande, France', '_blank');
  });
  
  document.getElementById('email-contact').addEventListener('click', function() {
    window.location.href = 'mailto:info@arcadiazoo.com';
  });
  

  document.addEventListener('DOMContentLoaded', function() {
    // Add dynamic animations to info sections
    const infoItems = document.querySelectorAll('.info-item');
  
    infoItems.forEach(item => {
      item.addEventListener('mouseover', function() {
        item.querySelector('.info-text').style.transform = 'translateY(-10px)';
        item.querySelector('.info-text').style.transition = 'transform 0.3s';
      });
  
      item.addEventListener('mouseout', function() {
        item.querySelector('.info-text').style.transform = 'translateY(0)';
        item.querySelector('.info-text').style.transition = 'transform 0.3s';
      });
    });
  
    // Scroll to section
    window.scrollToSection = function(sectionId) {
      document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
    };
  
    // Show more info
    window.showMoreInfo = function(infoType) {
      alert('More information about ' + infoType + ' coming soon!');
    };
  });
  