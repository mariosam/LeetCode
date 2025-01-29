/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { eventualSafeNodes } from './FindEventualSafeStates.js'

TEST('Starting FindEventualSafeStates test...', (t) => {
    //Test 1
    let want = [2,4,5,6]
    let got = eventualSafeNodes( [[1,2],[2,3],[5],[0],[5],[],[]] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [4]
    got = eventualSafeNodes( [[1,2,3,4],[1,2],[3,4],[0,4],[]] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
