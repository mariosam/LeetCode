/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countServers } from './CountServersThatCommunicate.js'

TEST('Starting CountServersThatCommunicate test...', (t) => {
    //Test 1
    let want = 0
    let got = countServers( [[1,0],[0,1]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = countServers( [[1,0],[1,1]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 4
    got = countServers( [[1,1,0,0],[0,0,1,0],[0,0,1,0],[0,0,0,1]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
