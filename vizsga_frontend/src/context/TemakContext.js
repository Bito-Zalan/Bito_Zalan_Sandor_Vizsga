import { createContext, useEffect, useState } from "react";
import { myAxios } from "./MyAxios";

export const TemakContext = createContext();

export const TemakProvider = ({ children }) => {
  const [temak, setTemak] = useState({
    temanev:'Kinézet',
  });

  const fetchTemak = async () => {
    try {
      const res = await myAxios.get("/tema");
      setTemak(res.data);
    } catch (error) {
      console.error("Hiba a témák betöltésekor", error);
    }
  };

  useEffect(() => {
    fetchTemak();
  }, []);

  return (
    <TemakContext.Provider value=
      {{
        temak,
        setTemak,
        fetchTemak,
      }}>
      ;{children}
    </TemakContext.Provider>
  );
};
