/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { removeElement } from './RemoveElement.js'

TEST('Starting RemoveElement test...', (t) => {
    //Test 1
    let want = 2
    let got = removeElement( [3,2,2,3], 3 )
    t.assert( want === got, "Expect: 2")
    //Test 2
    want = 5
    got = removeElement( [0,1,2,2,3,0,4,2], 2 )
    t.assert( want === got, "Expect: 5")

    t.end()
})
