
        document.addEventListener('DOMContentLoaded', function () {
          const body = document.body;
          const toggleSwitch = document.createElement('input');
          toggleSwitch.type = 'checkbox';
          toggleSwitch.id = 'darkModeToggle';
          toggleSwitch.className = 'toggle-switch';
          document.querySelector('.navbar').appendChild(toggleSwitch);
      
          const currentTheme = localStorage.getItem('theme');
      
          if (currentTheme) {
            body.classList.add(currentTheme);
            if (currentTheme === 'dark') {
              toggleSwitch.checked = true;
            }
          }
      
          toggleSwitch.addEventListener('change', switchTheme);
      
          function switchTheme() {
            if (toggleSwitch.checked) {
              body.classList.add('dark');
              localStorage.setItem('theme', 'dark');
            } else {
              body.classList.remove('dark');
              localStorage.setItem('theme', 'light');
            }
          }
        });
        
            function viewMore() {
                
                window.open("index2.html", '_blank');
            }
        
       
           
   