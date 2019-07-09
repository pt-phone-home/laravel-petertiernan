module.exports = {
    theme: {
        fontFamily: {
            display: ["Prata", "serif"],
            body: ["Lato", "sans-serif"],
        },
        extend: {
            colors: {
                "rocket-red": "#FF4212",
                "rocket-red-trans": "rgba(255, 67, 20, 0.8)",
                "rocket-green": "#00B27A",
                "rocket-green-trans": "rgba(0, 179, 122, 0.8)",
            },
            height: {
                "5r": "5rem",
                "8r": "8rem",
                "10r": "10rem",
                "12r": "12rem",
                "15r": "15rem",
                "20r": "20rem",
            },
        },
    },
    variants: {
        height: ["responsive", "hover", "group-hover"],
        width: ["responsive", "hover", "group-hover"],
    },
    plugins: [],
};
