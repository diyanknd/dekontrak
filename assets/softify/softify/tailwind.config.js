/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{html,js,php}'],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        transparent: 'transparent',
        primary: {
          5: 'rgb(var(--primary-color)/.05)',
          50: 'rgb(var(--primary-color)/.10)',
          75: 'rgb(var(--primary-color)/.20)',
          100: 'rgb(var(--primary-color)/.30)',
          200: 'rgb(var(--primary-color)/.60)',
          300: 'rgb(var(--primary-color)/1)',
          400: 'rgb(var(--primary-color)/1.2)',
          500: 'rgb(var(--primary-color)/1.4)'
        },
        secondary: {
          50: '#f4ebff',
          75: '#d1abff',
          100: '#bd89ff',
          200: '#a156ff',
          300: 'rgb(var(--secondary-color)/1)',
          400: '#6324b3',
          500: '#571f9c'
        },
        info: {
          50: '#e6f8fb',
          75: '#96e2ef',
          100: '#6bd6e9',
          200: '#2bc4df',
          300: 'rgb(var(--info-color)/1)',
          400: '#008198',
          500: '#007084'
        },
        success: {
          50: '#e9f9ef',
          75: '#a4e7bd',
          100: '#7fdda2',
          200: '#48cf79',
          300: 'rgb(var(--success-color)/1)',
          400: '#188a42',
          500: '#157839'
        },
        warning: {
          50: '#fff7e6',
          75: '#ffdd96',
          100: '#ffce6b',
          200: '#ffb92b',
          300: 'rgb(var(--warning-color)/1)',
          400: '#b37800',
          500: '#9c6800'
        },
        error: {
          50: '#ffeeea',
          75: '#ffbaaa',
          100: '#ff9d87',
          200: '#ff7353',
          300: 'rgb(var(--error-color)/1)',
          400: '#b33c22',
          500: '#9c341d'
        },
        neutral: {
          0: '#FFFFFF',
          10: '#FAFAFB',
          20: '#f5f6f6',
          30: '#ebeced',
          40: '#dfe0e2',
          50: '#c2c4c8',
          60: '#b3b6bb',
          70: '#a7aab0',
          80: '#999ca3',
          90: '#8a8e95',
          100: '#7b8088',
          200: '#6d717b',
          300: '#5e636e',
          400: '#525763',
          500: '#434956',
          600: '#373d4b',
          700: '#262d3b',
          800: '#171f2e',
          900: '#0b1323',
          903: '#23262B',
          904: '#1D1E24'
        }
      },
      screens: {
        sm: '576px',
        md: '768px',
        lg: '992px',
        xl: '1200px',
        xxl: '1400px',
        xxxl: '1600px',
        '4xl': '1800px'
      },
      animation: {
        'spin-slow': 'spin 7s linear infinite'
      }
    }
  }
}
