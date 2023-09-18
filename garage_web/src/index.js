import * as React from "react";
import * as ReactDOM from "react-dom";
import * as Reactui from 'react-ui';
import * as Bootstrap from 'bootstrap';
import Home from "./Pages/home";
import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";

import App from "./App";

const router = createBrowserRouter([
  {
    path: "/",
    element: <Home Direction={"Horizontal"} Connect={false}/>
  },
]);

ReactDOM.createRoot(document.getElementById("root")).render(
  <RouterProvider router={router} />
);