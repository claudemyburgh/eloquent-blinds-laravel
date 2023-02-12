import {createRoot} from 'react-dom/client'
import {useState, useEffect} from 'react'
import axios from "axios";

const contactDiv = document.getElementById('contact-form')

export default function ContactForm() {

    const [loading, setLoading] = useState(false)

    const [success, setSuccess] = useState(false)

    const [username, setUsername] = useState('')

    const [form, setForm] = useState({
        name: "",
        surname: "",
        email: "",
        subject: "",
        phone: "",
        message: "",
        newsletter: true
    })

    const [errors, setErrors] = useState({})

    const handleFormInput = (e) => {
        setForm({
            ...form,
            [e.target.name]: e.target.value
        })
    }
    const handleFormInputCheck = (e) => {
        setForm({
            ...form,
            [e.target.name]: e.target.checked
        })
    }




    const submitForm = async (e) => {
        e.preventDefault()
        setErrors({})
        setLoading(true)
        setUsername(form.name)

        try {
            e.preventDefault()
            await axios.post('/api/contact-send', {...form})
            await setSuccess(true)
            setForm({
                name: "",
                surname: "",
                email: "",
                subject: "",
                phone: "",
                message: "",
                newsletter: ""
            })
        } catch (e) {
            setErrors({
                ...e.response.data.errors
            })
        }
        setLoading(false)
    }



    return (

        <>
            {success && (
                <div
                    className="relative p-5 mb-4 mx-2 border border-green-500 bg-green-50 bg-green-500 rounded-md text-white shadow-lg shadow-green-500/30">
                    <button onClick={() => setSuccess(false)} type="button"
                            className={`absolute right-1 -skew-x-12 flex items-center justify-center top-1 h-8 w-8 rounded-md border border-white/30 text-white`}>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                             stroke="currentColor" className="w-5 h-5 skew-x-12">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    Hi, <span className={`font-semibold`}>{username}</span>. <br/>
                    We have received your email and will come back to you as soon as possible.
                </div>
            )}
            {(Object.keys(errors).length > 0) && (
                <div
                    className="relative p-5 mb-4 mx-2 border border-red-500 bg-red-500 rounded-md text-white shadow-lg shadow-red-500/30">
                    <button onClick={() => setErrors({})} type="button"
                            className={`absolute right-1 flex items-center justify-center top-1 h-8 w-8 -skew-x-12 rounded-md border border-white/30 text-white`}>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5"
                             stroke="currentColor" className="w-5 h-5 skew-x-12">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <strong className={`font-black`}>Oops!</strong> {Object.keys(errors).length} {Object.keys(errors).length === 1 ? 'error' : "errors"} was detected.
                </div>
            )}


            <div className={`flex flex-wrap bg-white rounded-md p-4 border border-gray-200`}>
                <div className={`p-2 w-full md:w-1/2 `}>
                    <div className="relative">
                        <label htmlFor="name" className={`leading-7 text-sm text-gray-600 font-semibold`}>Name</label>
                        <input type="text" id="name"
                               value={form.name}
                               name="name"
                               autoComplete={`given-name`}
                               onChange={handleFormInput}
                               className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.name ? 'border-red-500' : 'border-gray-300'}`}/>
                        {errors?.name && (
                            <span className={`py-2 text-sm text-red-500 block`}>{errors.name[0]}</span>
                        )}
                    </div>
                </div>
                <div className={`p-2 w-full md:w-1/2 `}>
                    <div className="relative">
                        <label htmlFor="surname" className={`leading-7 text-sm text-gray-600 font-semibold`}>Surname</label>
                        <input type="text" id="surname"
                               value={form.surname}
                               name="surname"
                               autoComplete={`family-name`}
                               onChange={handleFormInput}
                               className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.surname ? 'border-red-500' : 'border-gray-300'}`}/>
                        {errors?.surname && (
                            <span className={`py-2 text-sm text-red-500 block`}>{errors.surname[0]}</span>
                        )}
                    </div>
                </div>
                <div className={`p-2 w-full md:w-1/2`}>
                    <div className="relative">
                        <label htmlFor="email" className={`leading-7 text-sm text-gray-600 font-semibold`}>Email</label>
                        <input type="text" id="email"
                               name="email"
                               value={form.email}
                               autoComplete={`email`}
                               onChange={handleFormInput}
                               className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.email ? 'border-red-500' : 'border-gray-300'}`}/>
                        {errors?.email && (
                            <span className={`py-2 text-sm text-red-500 block`}>{errors.email[0]}</span>
                        )}
                    </div>
                </div>

                <div className={`p-2 w-full md:w-1/2 relative`}>
                    <label htmlFor="phone" className={`leading-7 text-sm text-gray-600 font-semibold`}>Phone</label>
                    <input type="tel" id="phone" name="phone"
                           onChange={handleFormInput}
                           value={form.phone}
                           autoComplete={`tel`}
                           className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.phone ? 'border-red-500' : 'border-gray-300'}`}/>
                    {errors?.phone && (
                        <span className={`py-2 text-sm text-red-500 block`}>{errors.phone[0]}</span>
                    )}
                </div>



                <div className={`w-full p-2 relative`}>
                    <label htmlFor="subject" className={`leading-7 text-sm text-gray-600 font-semibold`}>Subject</label>
                    {contactDiv.dataset.productTitle ? (
                        <select name="subject" id="subject" onChange={handleFormInput}
                                value={form.subject} className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.subject ? 'border-red-500' : 'border-gray-300'}`}>
                            <option value="">Select an subject</option>
                            <option value={`I need info about ${contactDiv.dataset.productTitle} product`} >I need info about {contactDiv.dataset.productTitle} product</option>
                            <option value={`Can you give me a quote on ${contactDiv.dataset.productTitle} product`}>Can you give me a quote on {contactDiv.dataset.productTitle} product</option>
                        </select>
                        ) : (
                        <input type="text" id="subject" name="subject"
                               onChange={handleFormInput}
                               value={form.subject}
                               className={`w-full bg-gray-100 bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.subject ? 'border-red-500' : 'border-gray-300'}`}/>
                    )}

                    {errors?.subject && (
                        <span className={`py-2 text-sm text-red-500 block`}>{errors.subject[0]}</span>
                    )}
                </div>



                <div className={`w-full p-2 relative`}>
                    <label htmlFor="message" className={`leading-7 text-sm text-gray-600 font-semibold`}>Message</label>
                    <textarea name="message" id="message" cols="30" rows="6"
                              onChange={handleFormInput}
                              value={form.message}
                              className={`w-full bg-gray-100 min-h-[200px] bg-opacity-50 rounded border focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base	outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ${errors?.message ? 'border-red-500' : 'border-gray-300'}`}></textarea>
                    {errors?.message && (
                        <span className={`py-2 text-sm text-red-500 block`}>{errors.message[0]}</span>
                    )}
                </div>
                {/*<div className={`p-2 w-full`}>*/}
                {/*    <div className="relative flex items-start">*/}
                {/*        <div className="flex items-center h-5">*/}
                {/*            <input*/}
                {/*                id="newsletter"*/}
                {/*                aria-describedby="newsletter-description"*/}
                {/*                name="newsletter"*/}
                {/*                onChange={handleFormInputCheck}*/}
                {/*                value={form.newsletter}*/}
                {/*                checked={form.newsletter}*/}
                {/*                type="checkbox"*/}
                {/*                className="focus:ring-primary-500 h-4 w-4 text-primary-600 border-gray-300 rounded"*/}
                {/*            />*/}
                {/*        </div>*/}
                {/*        <div className="ml-3 text-sm">*/}
                {/*            <label htmlFor="newsletter" className="font-medium text-gray-700">*/}
                {/*                Receive Newsletter*/}
                {/*            </label>*/}
                {/*            <span id="newsletter-description" className="text-gray-500">*/}
                {/*            <span className="sr-only">New newsletter </span> so you always know what's happening.*/}
                {/*                </span>*/}
                {/*        </div>*/}
                {/*    </div>*/}
                {/*</div>*/}
                <div className={`p-2 w-full`}>
                    <button disabled={loading} type="button" onClick={submitForm}
                            className={`relative flex mx-auto text-white bg-gradient-to-tr from-primary-500 to-secondary-300 hover:to-secondary-200 -skew-x-12 border-0 py-2 px-8 focus:outline-2 focus:outline-primary-500 focus:outline-offset-2 hover:bg-primary-600 disabled:text-primary-500 rounded text-lg disabled:bg-primary-50`}>
                            <span className={`relative skew-x-12`}>
                              SUBMIT
                            </span>
                        {loading && (
                            <svg className="absolute w-4 h-4 text-primary-500 top-[14px] left-3 animate-spin"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle className="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        strokeWidth="4"></circle>
                                <path className="opacity-75" fill="currentColor"
                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>)
                        }
                    </button>
                </div>
            </div>
        </>
    )
}




if (contactDiv) {
    createRoot(contactDiv).render(<ContactForm/>)
}
