/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { asteroidsDestroyed } from './DestroyingAsteroids.js'

TEST('Starting DestroyingAsteroids test...', (t) => {
    //Test 1
    let want = true
    let got = asteroidsDestroyed( 10, [3,9,19,5,21] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = asteroidsDestroyed( 5, [4,9,23,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
