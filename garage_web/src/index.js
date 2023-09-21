import * as React from "react";
import * as ReactDOM from "react-dom";
import Home from "./Pages/home";
import PageConnexion from "./Pages/PageConnexion"; 
import Horaire from "./composant/Horaire";
import PageCommentaire from "./Pages/commentaires";

import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";

var Connect=false;
var LvlTask=0;

const router = createBrowserRouter([
  {
    path: "/",
    element: <Home Direction={"Horizontal"} Connect={Connect}/>
  },
  {
    path: "/horaire",
    element: <Horaire Direction={"Horizontal"} Connect={Connect}/>
  },
  {
    path: "/connexion",
    element: <PageConnexion Direction={"Horizontal"} Connect={Connect}/>
  },
  {
    path: "/avis",
    element: <PageCommentaire Direction={"Horizontal"} Connect={Connect}/>
  },
]);

ReactDOM.createRoot(document.getElementById("root")).render(
  <RouterProvider router={router} />
);