module.exports = {
    devServer: {
      proxy: {
        '^/admin': {
          target: 'http://localhost:8000',
          changeOrigin: true
        },
      }
    }
  }