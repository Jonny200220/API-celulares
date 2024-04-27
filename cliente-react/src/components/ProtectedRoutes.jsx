import {Navigate, Outlet} from 'react-dom'
import storage from '../Storage/Storage'

export const ProtectedRoutes = ({children}) => {
    
    const authUser = storage.get('authUser')
    if(!authUser){
        return <Navigate to='/login'  />
    }
}

export default ProtectedRoutes