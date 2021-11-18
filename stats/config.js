const config_keywords = {
  type: "bar",
  data: data_keywords,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
};

const config_popular = {
  type: "doughnut",
  data: data_popular,
};

const config_resa = {
  type: "doughnut",
  data: data_resa,
};

const mconfig = {
  type: "bar",
  data: monitoring_data,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
};
