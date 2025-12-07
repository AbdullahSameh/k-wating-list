import "./bootstrap";
import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import { COMPONENTS } from "./components/index";

// Mount React components when DOM is ready
function mountReactComponents() {
    // loop through all elements with data-react-component attribute
    const elements = document.querySelectorAll("[data-react-component]");

    elements.forEach((el) => {
        const name = el.getAttribute("data-react-component");
        const Component = COMPONENTS[name];

        if (!Component) {
            console.warn(
                `React component "${name}" is not registered in COMPONENTS.`
            );
            return;
        }

        // if you want to pass props from Blade to the component
        const propsData = el.getAttribute("data-props");
        let props = {};

        if (propsData) {
            try {
                props = JSON.parse(propsData);
            } catch (e) {
                console.error("Error in JSON of props:", e);
            }
        }

        createRoot(el).render(
            <StrictMode>
                <Component {...props} />
            </StrictMode>
        );
    });
}

document.addEventListener("DOMContentLoaded", mountReactComponents);
