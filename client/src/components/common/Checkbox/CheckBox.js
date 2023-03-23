import { categoryList } from "./categoryList";
import { useState } from "react";

const Checkbox = () => {
	const filter = (e) => {
		const incheck = e.target.id;
	};

	return (
		<div className="mr-3 mt-4">
			{categoryList.map((item) => {
				return (
					<div className="flex mr-4 mt-4 ">
						<input
							className="ml-2 bg-primary"
							type="checkbox"
							id={item.id}
							onClick={filter}
						/>

						<label className="text-sm" htmlFor={item.id}>{item.lable}</label>
					</div>
				);
			})}
		</div>
	);
};
export default Checkbox;
