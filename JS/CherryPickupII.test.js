/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { cherryPickup } from './CherryPickupII.js'

TEST('Starting CherryPickupII test...', (t) => {
    //Test 1
    let want = 24
    let got = cherryPickup( [[3,1,1],[2,5,1],[1,5,5],[2,1,1]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 28
    got = cherryPickup( [[1,0,0,0,0,0,1],[2,0,0,0,0,3,0],[2,0,9,0,0,0,0],[0,3,0,5,4,0,0],[1,0,2,3,0,0,6]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
