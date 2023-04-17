module.exports = {
    mode     : 'jit',
    content  : [
        './public/docs/*.md',
        './app/Enums/**/*.php',
        './app/Requests/**/*.php',
        './spa/**/*.{css,js,vue,php}',
        './node_modules/@caneara/varnish/src/**/*.{css,js,vue}',
        './vendor/caneara/spine/resources/**/*.{css,js,vue,php}',
    ],
    darkMode : 'class',
    theme    : {
        spacing : {
            'auto'     : 'auto',
            'full'     : '100%',
            'screen-w' : '100vw',
            'screen-h' : '100vh',

            '0'  : '0',
            '1'  : '0.25rem',
            '2'  : '0.5rem',
            '3'  : '0.75rem',
            '4'  : '1rem',
            '5'  : '1.25rem',
            '6'  : '1.5rem',
            '7'  : '1.75rem',
            '8'  : '2rem',
            '9'  : '2.25rem',
            '10' : '2.5rem',
            '11' : '2.75rem',
            '12' : '3rem',
            '13' : '3.25rem',
            '14' : '3.5rem',
            '15' : '3.75rem',
            '16' : '4rem',
            '17' : '4.25rem',
            '18' : '4.5rem',
            '19' : '4.75rem',
            '20' : '5rem',
            '21' : '5.25rem',
            '22' : '5.5rem',
            '23' : '5.75rem',
            '24' : '6rem',
            '25' : '6.25rem',
            '26' : '6.5rem',
            '27' : '6.75rem',
            '28' : '7rem',
            '29' : '7.25rem',
            '30' : '7.5rem',

            '1px'    : '1px',
            '2px'    : '2px',
            '3px'    : '3px',
            '4px'    : '4px',
            '5px'    : '5px',
            '6px'    : '6px',
            '7px'    : '7px',
            '8px'    : '8px',
            '9px'    : '9px',
            '10px'   : '10px',
            '11px'   : '11px',
            '12px'   : '12px',
            '13px'   : '13px',
            '14px'   : '14px',
            '15px'   : '15px',
            '16px'   : '16px',
            '17px'   : '17px',
            '18px'   : '18px',
            '19px'   : '19px',
            '20px'   : '20px',
            '21px'   : '21px',
            '22px'   : '22px',
            '23px'   : '23px',
            '24px'   : '24px',
            '25px'   : '25px',
            '26px'   : '26px',
            '27px'   : '27px',
            '28px'   : '28px',
            '29px'   : '29px',
            '30px'   : '30px',
            '31px'   : '31px',
            '32px'   : '32px',
            '33px'   : '33px',
            '34px'   : '34px',
            '35px'   : '35px',
            '40px'   : '40px',
            '45px'   : '45px',
            '50px'   : '50px',
            '55px'   : '55px',
            '60px'   : '60px',
            '65px'   : '65px',
            '70px'   : '70px',
            '75px'   : '75px',
            '80px'   : '80px',
            '85px'   : '85px',
            '90px'   : '90px',
            '95px'   : '95px',
            '100px'  : '100px',
            '125px'  : '125px',
            '150px'  : '150px',
            '175px'  : '175px',
            '200px'  : '200px',
            '225px'  : '225px',
            '250px'  : '250px',
            '275px'  : '275px',
            '300px'  : '300px',
            '350px'  : '350px',
            '400px'  : '400px',
            '450px'  : '450px',
            '500px'  : '500px',
            '550px'  : '550px',
            '600px'  : '600px',
            '650px'  : '650px',
            '700px'  : '700px',
            '750px'  : '750px',
            '800px'  : '800px',
            '850px'  : '850px',
            '900px'  : '900px',
            '950px'  : '950px',
            '1000px' : '1000px',

            '1/2'   : '50%',
            '1/3'   : '33.333333%',
            '2/3'   : '66.666667%',
            '1/4'   : '25%',
            '2/4'   : '50%',
            '3/4'   : '75%',
            '1/5'   : '20%',
            '2/5'   : '40%',
            '3/5'   : '60%',
            '4/5'   : '80%',
            '1/6'   : '16.666667%',
            '2/6'   : '33.333333%',
            '3/6'   : '50%',
            '4/6'   : '66.666667%',
            '5/6'   : '83.333333%',
            '1/12'  : '8.333333%',
            '2/12'  : '16.666667%',
            '3/12'  : '25%',
            '4/12'  : '33.333333%',
            '5/12'  : '41.666667%',
            '6/12'  : '50%',
            '7/12'  : '58.333333%',
            '8/12'  : '66.666667%',
            '9/12'  : '75%',
            '10/12' : '83.333333%',
            '11/12' : '91.666667%',
            '1/10'  : '10%',
            '3/10'  : '30%',
            '7/10'  : '70%',
            '1/20'  : '5%',
            '7/20'  : '35%',
            '9/20'  : '45%',
            '11/20' : '55%',
            '17/20' : '85%',
            '19/20' : '95%',
        },

        extend : {
            height    : (theme) => ({ ...theme('spacing') }),
            width     : (theme) => ({ ...theme('spacing') }),
            minWidth  : (theme) => ({ ...theme('spacing') }),
            minHeight : (theme) => ({ ...theme('spacing') }),
            maxWidth  : (theme, { breakpoints }) => ({ ...theme('spacing'), ...breakpoints(theme('screens')) }),
            zIndex    : { 'minus-1' : '-1', '1' : '1', '2' : '2', '3' : '3', '100' : '100', '998' : '998', '999' : '999', '1000' : '1000', '1001' : '1001', '1002' : '1002' },
        },

        container : {
            center  : true,
            padding : { DEFAULT : '1.5rem', md : '1rem', lg : '2rem', xl : '2rem' },
            screens : { xl : '1200px' }
        },

        fontFamily : {
            mono   : ['Roboto Mono', 'ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
            native : ['ui-sans-serif', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
            sans   : ['Proxima Vara', 'ui-sans-serif', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
        },

        fontSize : Array(101).fill('').map((v, i) => i).reduce((a, i) => ({ ...a, [`${i}px`]: `${i}px`}), {}),
    }
}