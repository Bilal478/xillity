import React from 'react'
import UpdatePasswordContent from '../components/login/UpdatePasswordContent'
import Head from 'next/head'

const UpdatePassword = () => {
  return (
    <>
    <Head>
      <title>Digiboard - Update Password</title>
      <meta name="description" content="Generated by create next app" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" href="assets/favicon.png" />
    </Head>
    <UpdatePasswordContent/>
    </>
  )
}

export default UpdatePassword