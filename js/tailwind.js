tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                primary: '#9A207F',
                secondary: '#54155E',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: 0 },
                    '100%': { opacity: 1 },
                },
            },
            animation: {
                fadeIn: "fadeIn 2s forwards",
            },
        },
    },
};