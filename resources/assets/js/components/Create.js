import React from 'react'
import ReactDom from 'react-dom'

export default class Create extends React.Component {
    constructor() {
        super();
        this.state = {
            data : []
        }
    }

    render() {
    return (
        <div>
        <h2>Add New USER</h2>
        < form  className = "form-horizontal" >
            <div   className = "form-group" >
            < label   className = "control-label col-sm-2" for = "name" > Name : </label>
            <div className="col-sm-10">
            <input type="text" className="form-control" id="name" placeholder="Enter name" name="name"/>
        </div>
    </div>
        <div className="form-group">
            <label htmlFor="email" className="control-label">Email: </label>
            <div className="col-sm-10">
                <input type="email" className="form-control" id="email" placeholder="Enter email:" name="email"/>
            </div>
        </div>
        <div className="form-group">
            <label htmlFor="pwd" className="control-label">Password: </label>
            <div className="col-sm-10">
                <input type="password" className="form-control" id="pwd" placeholder="Enter password:" name="password"/>
            </div>
        </div>
        <div className="form-group">
            <div className="col-sm-offset-2 col-sm-10">
                <button type="submit" className="btn btn-default">Save</button>
            </div>
        </div>

            </form>
        </div>

  )
}
}

ReactDom.render(<Create/>, document.getElementById('app'));