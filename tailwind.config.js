module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js"
    ],
    theme: {
      container: {
        padding: '2em'
      },
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif']
      },
      extend: {
          backgroundImage:{
              'hero-bg': "url('../images/header.jpg')"
          }
      },
    },
    plugins: [],
  }
