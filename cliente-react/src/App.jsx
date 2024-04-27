import { useState } from 'react'
import '../src/index.css'


function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <h1 className='text-center font-bold text-3xl'>
        Login
      </h1>
    </>
  )
}

export default App
