const data_keywords = {
  labels: ["Mots détectés"],
  datasets: [
    {
      label: ["Minute"],
      data: [10],
      backgroundColor: ["rgb(255, 99, 132)"],
      borderWidth: 1,
    },
    {
      label: ["Heure"],
      data: [60],
      backgroundColor: ["rgb(54, 162, 235)"],
      borderWidth: 1,
    },
    {
      label: ["Jour"],
      data: [100],
      backgroundColor: ["rgb(255, 205, 86)"],
      borderWidth: 1,
    },
  ],
};

const data_popular = {
  labels: ["Demi-pension", "Tout inclus", "Paris"],
  datasets: [
    {
      label: "My First Dataset",
      data: [300, 50, 100],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};

const data_resa = {
  labels: ["Paris", "Marseille", "Londres"],
  datasets: [
    {
      label: "Réservation",
      data: [30, 10, 45],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};

const monitoring_data = {
  labels: ["Taux d'utilisation"],
  datasets: [
    {
      label: ["CPU"],
      data: [80, 100],
      backgroundColor: ["rgb(255, 99, 132)"],
      borderWidth: 1,
    },
    {
      label: ["RAM"],
      data: [50, 100],
      backgroundColor: ["rgb(54, 162, 235)"],
      borderWidth: 1,
    },
  ],
};
