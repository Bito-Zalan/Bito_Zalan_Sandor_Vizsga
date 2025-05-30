import { createContext, useState } from "react";

export const SzavakContext = createContext();

export const SzavakProvider = ({ children }) => {
  const [szavak, setSzavak] = useState({
    angol: "beautiful",
    magyar: "gyönyörű",
    temaId: 1,
  });

  const fetchSzavak = async () => {
    try {
      const res = await myAxios.get("/szavak");
      setSzavak(res.data);
    } catch (error) {
      console.error("Hiba a szavak betöltésekor", error);
    }
  };

  return (
    <SzavakContext.Provider>
      {" "}
      value=
      {{
        szavak,
        setSzavak,
        fetchSzavak,
      }}
      ;{children}
    </SzavakContext.Provider>
  );
};
