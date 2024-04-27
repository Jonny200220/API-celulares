import { BrowserRouter, Routes, Route } from "react-dom"
import Navigation from "./components/Navigation"
import Departaments from "./Views/Departaments/Index"
import CreateDepartment from "./Views/Departaments/Create"
import EditDepartment from "./Views/Departaments/Edit"
import Employees from "./Views/Employees/Index"
import Graphic from "./Views/Employees/Graphic"
import Login from "./Views/Login"
import Register from "./Views/Register"
import ProtectedRoutes from "./components/ProtectedRoutes"


function App() {
  return (
    <>
      <BrowserRouter>
        <Navigation>
          <Routes>
            <Route path = '/login' element={<Login/>}>    </Route>
            <Route path = '/register' element={<Login/>}> </Route>
            <Route path = '/' element={<Departaments/>}>  </Route>
            <Route path = '/create' element={<CreateDepartment/>}>  </Route>
            <Route path = '/edit/:id' element={<EditDepartment/>}></Route>
            <Route path = '/employees' element={<Employees/>}></Route>
            <Route path = '/graphic' element={<Graphic/>}></Route>
          </Routes>
        </Navigation>
      </BrowserRouter>
    </>
  )
}

export default App
