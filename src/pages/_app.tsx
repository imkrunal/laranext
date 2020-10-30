import React from 'react';
import { AppProps } from 'next/app';
import { ChakraProvider } from '@chakra-ui/core';
import { theme } from 'common';

const MyApp = ({ Component, pageProps }: AppProps) => (
  <ChakraProvider theme={theme} resetCSS>
    <Component {...pageProps} />
  </ChakraProvider>
);

export default MyApp;
